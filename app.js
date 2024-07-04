const express = require('express');
const path = require('path');
const { engine } = require('express-handlebars');

const app = express();

// Servir arquivos estáticos do diretório "public"
app.use(express.static(path.join(__dirname, 'public')));

// Servir arquivos estáticos do Bootstrap
app.use('/bootstrap', express.static(path.join(__dirname, 'node_modules', 'bootstrap', 'dist')));

// Configurando o Handlebars como motor de visualização
app.engine('handlebars', engine({
  defaultLayout: 'main',
  partialsDir: path.join(__dirname, 'views', 'partials')
}));
app.set('view engine', 'handlebars');
app.set('views', path.join(__dirname, 'views'));

// Rota para a página principal
app.get('/', function(req, res){
  res.render('home');
});

// Rota para css
app.use('/public/assets/css', express.static('./public/assets/css'))
app.use('/public/assets/js', express.static('./public/assets/js'))
// Iniciar o servidor
const PORT = 8081;
app.listen(PORT, () => {
  console.log(`Servidor rodando na porta ${PORT}`);
});
