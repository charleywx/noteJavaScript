var fs = require("fs");

var filePath = "d:/ideaProject/github/NoteJavaScript/nodejs/study.txt";
// var filePath = "nodejs/study.txt";

// 同步读取
var data = fs.readFileSync(filePath);
console.log(data.toString());

// 获取文件信息
fs.stat(filePath, function(err, data) {
    if (err) return console.error(err);
    console.log('是文件:' + data.isFile());
    console.log('是目录:' + data.isDirectory());
    console.log('是块设备:' + data.isBlockDevice());
    console.log('是字符设备:' + data.isCharacterDevice());
    console.log('是软链接:' + data.isSymbolicLink());
    console.log('是FIFO(UNIX中的一种特殊类型的命令管道):' + data.isFIFO());
    console.log('是 Socket :' + data.isSocket());

    console.log("读取文件信息成功！");
    console.log(data);
});


// fs.readFile是异步的
/* var fs = require("fs");

fs.readFile(filePath, function(err, data) {
    if (err) {
        console.log(err.stack);
        return;
    }
    console.log(data.toString());
}); */
// console.log("程序执行完毕");

// 写入文件
// fs.writeFile(file, data[, options], callback)
//     file - 文件名或文件描述符。
//     data - 要写入文件的数据，可以是 String(字符串) 或 Buffer(流) 对象。
//     options - 该参数是一个对象，包含 {encoding, mode, flag}。默认编码为 utf8, 模式为 0666 ， flag 为 'w'
//     callback - 回调函数，回调函数只包含错误信息参数(err)，在写入失败时返回。

/* console.log("准备写入文件");
fs.writeFile('input.txt', '我是通过写入的文件内容2！', function(err) {
    if (err) {
        return console.error(err);
    }
    console.log("数据写入成功！");
    console.log("--------我是分割线-------------")
    console.log("读取写入的数据！");
    fs.readFile('input.txt', function(err, data) {
        if (err) {
            return console.error(err);
        }
        console.log("异步读取文件数据: " + data.toString());
    });
}); */

// 读取文件
// fs.read(fd, buffer, offset, length, position, callback)
//     fd - 通过 fs.open() 方法返回的文件描述符。
//     buffer - 数据写入的缓冲区。
//     offset - 缓冲区写入的写入偏移量。
//     length - 要从文件中读取的字节数。
//     position - 文件读取的起始位置，如果 position 的值为 null，则会从当前文件指针的位置读取。
//     callback - 回调函数，有三个参数err, bytesRead, buffer，err 为错误信息， bytesRead 表示读取的字节数，buffer 为缓冲区对象。

var buf = new Buffer(1024);

console.log("准备打开已存在的文件！");
fs.open('input.txt', 'r+', function(err, fd) {
    if (err) {
        return console.error(err);
    }
    console.log("文件打开成功！");
    console.log("准备读取文件：");
    fs.read(fd, buf, 0, buf.length, 0, function(err, bytes) {
        if (err) {
            console.log(err);
        }
        console.log(bytes + "  字节被读取");

        // 仅输出读取的字节
        if (bytes > 0) {
            console.log(buf.slice(0, bytes).toString());
        }

        // 关闭文件
        fs.close(fd, function(err) {
            if (err) {
                console.log(err);
            }
            console.log("文件关闭成功");
        });
    });
});

//截取文件
//删除文件
//创建目录
//http://www.runoob.com/nodejs/nodejs-fs.html