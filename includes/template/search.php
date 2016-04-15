

	<div class="mt-search-result-wrapper hidden">
      <section class="main-feed-header clearfix">

        <div class="mt-shots-nav-wrapper">
<!--          Navig-->
        </div>
      </section>
        <main>
          <h3>Results</h3>
          <div id="hits"></div>
          <ul id="pagination" class="pagination"></ul>

        </main>


	</div>

	    <script type="text/javascript">
      $(document).ready(function() {
        var $inputfield = $('#q');

        // Replace the following values by your ApplicationID and ApiKey.
        var client = algoliasearch('RQO4LL16TO', '53a754b22aa63d7a38a04c9ee76f596a');
        // Replace the following value by the name of the index you want to query.
        var index = client.initIndex('instant_search');

        // callback called on each query
        function searchCallback(err, content) {
          if (err) {
            // error
            return;
          }

          if (content.query != $('#q').val()) {
            // do not take out-dated answers into account
            return;
          }

          if (content.hits.length == 0) {
            // no results
            $('#hits').empty();
            $('#pagination').empty();
            return;
          }

          // Scan all hits and display them
          var html = '';
          for (var i = 0; i < content.hits.length; ++i) {
            var hit = content.hits[i];

            html += '<div class="hit">';
            for (var attribute in hit._highlightResult) {
              html += '<div class="attribute">' +
                '<span>' + attribute + ': </span>' +
                hit._highlightResult[attribute].value +
                '</div>';
            }
            html += '</div>';
          }
          $('#hits').html(html);
          
          }
        // perform a search
        function search(q, params) {
          index.search(q, params, searchCallback);
        }

        // events binding
        $inputfield.keyup(function() {
          // on each keystroke, perform the query
          search($inputfield.val());
        }).focus().closest('form').on('submit', function() {
          // on form submit, store the query string in the anchor
          location.replace('#q=' + encodeURIComponent($inputfield.val()));
          return false;
        });

        // check if there is a query+page in the anchor: http://example.org/#q=my+query&page=42
        if (location.hash && location.hash.indexOf('#q=') === 0) {
          var params = location.hash.substring(3);
          var pageParamOffset = params.indexOf('&page=');
          var q, page;
          if (pageParamOffset > -1) {
            q = decodeURIComponent(params.substring(0, pageParamOffset));
            page = params.substring(pageParamOffset).split('=')[1];
          } else {
            q = decodeURIComponent(params);
            page = 1;
          }

          // fill the form
          $inputfield.val(q);

          // perform the search
          search(q, { page: (page - 1) });
        }
      });

    </script>