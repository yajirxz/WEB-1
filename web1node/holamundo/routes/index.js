var express = require('express');
var router = express.Router();
var db = require('../config/db.js');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Web 1 ico FES Aragon' });
});

router.get('/ico', function(req,res,next){
  res.render('formulario', {titulo: 'Ejemplo'} );
});

router.post('/procesa', function(req, res, next){
  res.render('resultado', {contenido: ok})
});

router.get('/libros',(req, res, next) =>{
  const sql = 'SELECT * FROM libros;';
  db.query(sql, (error, resultados) =>{
    if(error){
    console.log('Error en la consulta', error);
   }
  // res.json(resultados);
  res.render('libros', {libros : resultados});
  } );
     
} );
module.exports = router;
