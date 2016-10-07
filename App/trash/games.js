/**
 * Created by yearzero on 10/6/2016.
 */


var json = '/games.json';

$.each(JSON.parse(json), function(idx, obj) {
    alert(obj.tagName);
});