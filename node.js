'use strict';

// node examples/node.js
var algoliasearch = require('../');
var client = algoliasearch('RQO4LL16TO', '3253efd25adfa7cf477192f128fc883b');
var index = client.initIndex('instant_search');

index.search('something', function(err, results) {
  if (err) {
    throw err;
  }

  console.log('We got `' + results.nbHits + '` results');
  console.log('Here is the first one: ', results.hits[0]);

  // call client.destroy() this when you need to stop the node.js client
  // it will release any keepalived connection
  client.destroy();
});
