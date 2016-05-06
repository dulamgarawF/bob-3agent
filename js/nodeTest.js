function genOraDb(){
  var oracledb = require('oracledb');

oracledb.getConnection(
  {
    user          : "TEST",
    password      : "test",
    connectString : "localhost/XE"
  },
  function(err, connection)
  {
    if (err) { console.error(err); return; }
    connection.execute(
      "SELECT * from BOOKREGISTRATION",
      function(err, result)
      {
        if (err) { alert(err); return; }
        alert(result.rows);
      });
  });

}