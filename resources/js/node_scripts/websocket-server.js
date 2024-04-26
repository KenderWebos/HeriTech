console.log("starting websocket server...");

const WebSocket = require('ws');
const wss = new WebSocket.Server({ port: 3030 });

console.log("1/2");

wss.on('connection', function connection(ws) {
  ws.on('message', function incoming(message) {
    const textMessage = message.toString();
    wss.clients.forEach(function each(client) {
      if (client !== ws && client.readyState === WebSocket.OPEN) {
        client.send(textMessage);
      }
    });
  });
});

console.log("2/2");

console.log("Complete");
