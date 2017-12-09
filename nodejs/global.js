// 输出全局变量 __filename 的值
console.log(__filename);

// 输出全局变量 __dirname 的值
console.log(__dirname);

// setTimeout(cb, ms) 全局函数
function printHello() {
    console.log("Hello, World!");
}
// 两秒后执行以上函数
// setTimeout(printHello, 2000);


// var t = setTimeout(printHello, 2000);
// 清除定时器
// clearTimeout(t);


// setInterval(cb, ms) 全局函数，每2秒执行一次，阻塞后面程序的执行
// setInterval(printHello, 2000);

console.time('时间：');
console.log('[data][, ...]');
// console.trace();
// console.assert
console.timeEnd('时间：');

// 输出到终端
process.stdout.write("Hello World!" + "\n");

// 通过参数读取
process.argv.forEach(function(val, index, array) {
    console.log(index + ': ' + val);
});

// 获取执行路径
console.log(process.execPath);

// 平台信息
console.log(process.platform);
console.log(process.uptime());
console.log(process.hrtime());
console.log(process.memoryUsage());