const { createPool } = require('mysql');

const pool = createPool({
    host: "localhost",
    user: "root",
    port: 3308,
    database: "test",
    connectionLimit: 10,
    password:'',
})

pool.query(`select * from registration`, function(err, result, fields) {
    if (err) {
        return console.log(err);
    }
    return console.log(result);
})
module.exports=pool;