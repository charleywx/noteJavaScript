// cnpm install mysql
// http://www.runoob.com/nodejs/nodejs-mysql.html
// https://github.com/mysqljs/mysql
var mysql = require('mysql');
var connection = mysql.createConnection({
    host: 'localhost',
    // port: 3306,
    user: 'test',
    password: 'test',
    database: 'test'
});

connection.connect();

connection.query('SELECT 1 + 1 AS solution', function(error, results, fields) {
    if (error) throw error;
    console.log('The solution is: ', results[0].solution);
});


// var addSql = 'INSERT INTO newtable(name,value) VALUES(?,?)';
// var addSqlParams = ['张三', '90'];
// connection.query(addSql, addSqlParams, function(err, result) {
//     if (err) {
//         console.log('[INSERT ERROR] - ', err.message);
//         return;
//     }
//     console.log('--------------------------INSERT----------------------------');
//     //console.log('INSERT ID:',result.insertId);        
//     console.log('INSERT ID:', result);
//     console.log('-----------------------------------------------------------------\n\n');
// });


// var modSql = 'UPDATE newtable SET value = ? WHERE name = ?';
// var modSqlParams = ['77', '张三'];
// connection.query(modSql, modSqlParams, function(err, result) {
//     if (err) {
//         console.log('[UPDATE ERROR] - ', err.message);
//         return;
//     }
//     console.log('--------------------------UPDATE----------------------------');
//     console.log('UPDATE affectedRows', result.affectedRows);
//     console.log('-----------------------------------------------------------------\n\n');
// });


var sql = "DELETE FROM newtable where name='张三'";
connection.query(sql, function(err, result) {
    if (err) {
        console.log('[DELETE ERROR] - ', err.message);
        return;
    }

    console.log('--------------------------DELETE----------------------------');
    console.log('DELETE affectedRows', result.affectedRows);
    console.log('-----------------------------------------------------------------\n\n');
});

// 关闭数据库
connection.end();