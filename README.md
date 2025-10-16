# 🚀 Guía Rápida para Iniciar el Proyecto

## 📋 Requisitos Previos

Antes de empezar, asegúrate de tener instalado en tu computadora:

- **PHP** (versión 8.2 o superior)
- **Composer** (gestor de paquetes de PHP)
- **Node.js** y **npm** (para los estilos y JavaScript)
- **MySQL** o **PostgreSQL** (base de datos)

---

## 🛠️ Pasos de Instalación

### 1️⃣ Descargar el Proyecto

Clona el repositorio en tu computadora:

```bash
git clone https://github.com/Firebytex/proyectolaravel.git
cd proyectolaravel
```

---

### 2️⃣ Configurar Variables de Entorno

Copia el archivo de ejemplo de configuración:

**En Windows (CMD):**
```bash
copy .env.example .env
```


📝 **¿Qué hace esto?** Crea un archivo con la configuración de tu base de datos y otros ajustes importantes.

---

### 3️⃣ Instalar Dependencias de PHP

Ejecuta en la terminal:

```bash
composer install
```

⏳ **Espera:** Este proceso puede tardar unos minutos. Está descargando todas las librerías necesarias de PHP.

---

### 4️⃣ Instalar Dependencias de JavaScript

Ejecuta en la terminal:

```bash
npm install
```

⏳ **Espera:** Similar al paso anterior, pero para JavaScript y CSS.

---

### 5️⃣ Generar Clave de Aplicación

Ejecuta en la terminal:

```bash
php artisan key:generate
```

🔐 **¿Qué hace esto?** Crea una clave de seguridad única para tu aplicación.

---

### 6️⃣ Configurar Base de Datos

Abre el archivo `.env` con cualquier editor de texto y configura:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

💾 **Importante:** Crea primero la base de datos en MySQL/PostgreSQL antes de continuar.

---

### 7️⃣ Crear Tablas en la Base de Datos

Ejecuta en la terminal:

```bash
php artisan migrate
```

✅ **¿Qué hace esto?** Crea automáticamente todas las tablas necesarias en tu base de datos.

---

### 8️⃣ Iniciar el Servidor

Abre **DOS TERMINALES** diferentes:

**Terminal 1 - Servidor de Laravel:**
```bash
php artisan serve
```

**Terminal 2 - Compilador de estilos:**
```bash
npm run dev
```

---

## 🎉 ¡Listo!

Abre tu navegador y visita:

```
http://localhost:8000
```

---

## ⚠️ Solución de Problemas Comunes

### Error: "composer no se reconoce"
👉 Necesitas instalar Composer: https://getcomposer.org/

### Error: "npm no se reconoce"
👉 Necesitas instalar Node.js: https://nodejs.org/

### Error al hacer migrate
👉 Verifica que tu base de datos exista y que las credenciales en `.env` sean correctas.

### El servidor no inicia
👉 Verifica que el puerto 8000 no esté siendo usado por otra aplicación.

---

## 📞 ¿Necesitas Ayuda?

Si algo no funciona, contacta al desarrollador del proyecto y envíale:
- El mensaje de error completo
- Captura de pantalla
- Qué paso estabas ejecutando

---

## 🔄 Para Actualizar el Proyecto

Si el repositorio tiene cambios nuevos:

```bash
git pull
composer install
npm install
php artisan migrate
```

---

**¡Éxito con tu proyecto! 🎊**
