var util = require('util');

function Person() {
    this.name = 'byvoid';
    this.toString = function() {
        return this.name;
    };
}
var obj = new Person();
console.log(util.inspect(obj));
console.log(util.inspect(obj, true, 2, true));

// util.inherits 原型复制
// util.isArray(object)
// util.isRegExp(object)
// util.isDate(object)
// util.isError(object)