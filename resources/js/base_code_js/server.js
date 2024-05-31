const express = require('express');
const http = require('http');
const socketIo = require('socket.io');

// Configuración del servidor
const app = express();
const server = http.createServer(app);
const io = socketIo(server);

let nextUserId = 1;

// Manejador de conexiones
io.on('connection', (socket) => {
  const userId = nextUserId++;
  console.log(`Usuario ${userId} conectado`);
  io.emit(`Usuario ${userId} conectado 👀`);

  // Enviar el ID del usuario al cliente
  socket.emit('userId', userId);

  // Manejar mensajes de chat
  socket.on('chatMessage', (msg) => {
    io.emit('chatMessage', { userId, msg });
  });

  // Manejar la desconexión
  socket.on('disconnect', () => {
    console.log(`Usuario ${userId} desconectado`);
    io.emit(`Usuario ${userId} desconectado 😵`);
  });
});

// Servir archivos estáticos
app.use(express.static('public'));

// Iniciar el servidor
const PORT = process.env.PORT || 3030;
server.listen(PORT, () => {
  console.log(`----------------------------------------------------`);
  console.log(`Servidor escuchando en el puerto ${PORT}`);
  console.log(`http://localhost:${PORT}`);
  console.log(`----------------------------------------------------`);

});
