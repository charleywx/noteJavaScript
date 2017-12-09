var util = require('util');

// console.log(util.inspect(process));

/* [ '...\\nodejs\\node.exe',
'...NoteJavaScript\\nodejs\\support.js' ] */
console.log(util.inspect(process.argv));

// process.argv命令参数
console.log("进程 " + process.argv[2] + " 执行。");