// Importamos la biblioteca OpenAI
const openai = require('openai');

// Configuramos la clave de API
openai.api_key = 'YOUR_API_KEY';

// Función para generar una respuesta a partir de un mensaje de inicio
async function generarRespuesta(mensaje) {
  // Definimos los parámetros de la solicitud
  const params = {
    prompt: mensaje,
    temperature: 0.7,
    max_tokens: 100,
    model: 'text-davinci-003',
  };

  // Enviamos la solicitud a la API
  const respuesta = await openai.Completion.create(params);

  // Extraemos el texto de la respuesta
  const textoGenerado = respuesta.choices[0].text;

  // Devolvemos el texto generado
  return textoGenerado;
}

// Función para iniciar una conversación
async function iniciarConversacion() {
  // Pedimos al usuario que introduzca un mensaje
  const mensaje = prompt('Introduzca un mensaje:');

  // Generamos una respuesta a partir del mensaje
  const respuesta = await generarRespuesta(mensaje);

  // Mostramos la respuesta al usuario
  console.log('ChatGPT:', respuesta);

  // Preguntamos al usuario si desea continuar la conversación
  const continuar = confirm('¿Desea continuar la conversación?');

  // Si el usuario desea continuar, iniciamos un nuevo ciclo
  if (continuar) {
    iniciarConversacion();
  }
}

// Iniciamos la conversación
iniciarConversacion();
