
# 💬 Menaylex IA API - Chat Inteligente con PHP y HTML

Bienvenido a la implementación básica y funcional de un **chat web con inteligencia artificial** utilizando la API de **Menaylex IA**. Este proyecto está desarrollado en HTML, CSS y PHP, y permite enviar mensajes y recibir respuestas generadas por IA de manera sencilla y elegante.

---

## 🚀 Características

- ✅ Interfaz web limpia y responsive.
- ✅ Comunicación con la IA mediante solicitudes `POST` a la API oficial.
- ✅ Procesamiento y validación básica del input del usuario.
- ✅ Fácil integración en cualquier servidor con soporte PHP.
- ✅ Totalmente gratuito y personalizable.

---

## 🧠 ¿Qué es Menaylex IA?

**Menaylex IA** es una solución de inteligencia artificial generativa que responde preguntas, asiste con tareas de programación y mantiene conversaciones naturales, diseñada por [Menaylex.com](https://menaylex.com).

---

## 📁 Estructura del Proyecto

```
📁 menaylex-chat
├── index.html   # Archivo principal HTML + PHP embebido
├── README.md    # Este archivo
```

---

## 🖥️ Vista Previa

![Demo](https://menaylex.com/assets/demo-chat-menaylex.png) <!-- Opcional si tienes una imagen de demo -->

---

## ⚙️ Requisitos

- Servidor con PHP 7.4 o superior
- Conexión a Internet para acceder a la API
- Navegador web moderno

---

## 🛠️ Instalación y Uso

1. **Clona o descarga** este repositorio en tu servidor:

```bash
git clone https://github.com/tuusuario/menaylex-chat.git
```

2. **Abre el archivo** `index.html` en tu navegador (debe estar en un servidor con PHP habilitado).

3. **Escribe un mensaje** y haz clic en "Enviar". La IA responderá de forma automática.

---

## 🔐 Seguridad

- Se recomienda usar `htmlspecialchars()` como ya está implementado para prevenir ataques XSS.
- Si vas a hacer esta aplicación pública, considera implementar verificación por token o API key.

---

## 📬 Solicitudes a la API

Las solicitudes se hacen a:

```
POST https://menaylex.com/Tools/api.php
Content-Type: application/json

{
  "message": "Tu mensaje aquí"
}
```

La respuesta esperada será:

```json
{
  "reply": "Respuesta generada por la IA"
}
```

---

## 📄 Licencia

Este proyecto está bajo la licencia **MIT**. Eres libre de usar, modificar y distribuir este código con fines personales o comerciales.

---

## 🙋‍♂️ Soporte y Contacto

¿Dudas, sugerencias o mejoras? Contáctanos a través de:

- 🌐 [https://menaylex.com](https://menaylex.com)
- 📧 contacto@menaylex.com

---

> Desarrollado con ❤️ por [Menaylex](https://menaylex.com) – Impulsando la inteligencia en la web.
