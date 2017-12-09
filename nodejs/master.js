const fs = require('fs');
const child_process = require('child_process');

// child_process.exec(command[, options], callback)
/* 参数
参数说明如下：
command： 字符串， 将要运行的命令，参数使用空格隔开
options ：对象，可以是：
    cwd ，字符串，子进程的当前工作目录
    env，对象 环境变量键值对
    encoding ，字符串，字符编码（默认： 'utf8'）
    shell ，字符串，将要执行命令的 Shell（默认: 在 UNIX 中为/bin/sh， 在 Windows 中为cmd.exe， Shell 应当能识别 -c开关在 UNIX 中，或 /s /c 在 Windows 中。 在Windows 中，命令行解析应当能兼容cmd.exe）
    timeout，数字，超时时间（默认： 0）
    maxBuffer，数字， 在 stdout 或 stderr 中允许存在的最大缓冲（二进制），如果超出那么子进程将会被杀死 （默认: 200*1024）
    killSignal ，字符串，结束信号（默认：'SIGTERM'）
    uid，数字，设置用户进程的 ID
    gid，数字，设置进程组的 ID
callback ：回调函数，包含三个参数error, stdout 和 stderr。
exec() 方法返回最大的缓冲区，并等待进程结束，一次性返回缓冲区的内容。  */

/* for (var i = 0; i < 3; i++) {
    var workerProcess = child_process.exec('node support.js ' + i,
        function(error, stdout, stderr) {
            if (error) {
                console.log(error.stack);
                console.log('Error code: ' + error.code);
                console.log('Signal received: ' + error.signal);
            }
            console.log('stdout: ' + stdout);
            console.log('stderr: ' + stderr);
        });

    workerProcess.on('exit', function(code) {
        console.log('子进程已退出，退出码 ' + code);
    });
} */

// child_process.spawn(command[, args][, options])
/* 
参数说明如下：
command： 将要运行的命令
args： Array 字符串参数数组
options Object
    cwd String 子进程的当前工作目录
    env Object 环境变量键值对
    stdio Array|String 子进程的 stdio 配置
    detached Boolean 这个子进程将会变成进程组的领导
    uid Number 设置用户进程的 ID
    gid Number 设置进程组的 ID
spawn() 方法返回流 (stdout & stderr)，在进程返回大量数据时使用。进程一旦开始执行时 spawn() 就开始接收响应。 
*/
/* for (var i = 0; i < 3; i++) {
    var workerProcess = child_process.spawn('node', ['support.js', i]);
    workerProcess.stdout.on('data', function(data) {
        console.log('stdout: ' + data);
    });
    workerProcess.stderr.on('data', function(data) {
        console.log('stderr: ' + data);
    });
    workerProcess.on('close', function(code) {
        console.log('子进程已退出，退出码 ' + code);
    });
} */

/* 
fork 方法
child_process.fork 是 spawn() 方法的特殊形式，用于创建进程，语法格式如下：
child_process.fork(modulePath[, args][, options]) 
参数
参数说明如下：
modulePath： String，将要在子进程中运行的模块
args： Array 字符串参数数组
options：Object
    cwd String 子进程的当前工作目录
    env Object 环境变量键值对
    execPath String 创建子进程的可执行文件
    execArgv Array 子进程的可执行文件的字符串参数数组（默认： process.execArgv）
    silent Boolean 如果为true，子进程的stdin，stdout和stderr将会被关联至父进程，否则，它们将会从父进程中继承。（默认为：false）
    uid Number 设置用户进程的 ID
    gid Number 设置进程组的 ID
返回的对象除了拥有ChildProcess实例的所有方法，还有一个内建的通信信道。 
*/
for (var i = 0; i < 3; i++) {
    var worker_process = child_process.fork("support.js", [i]);
    worker_process.on('close', function(code) {
        console.log('子进程已退出，退出码 ' + code);
    });
}