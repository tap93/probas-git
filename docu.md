# 📁 Estaticos

Este é un proxecto básico de probas co uso de Git, no que se incorporan **HTML**, **CSS** e o framework **Bootstrap** para deseño responsivo.

## 🚀 Tecnoloxías empregadas

- HTML5
- CSS3
- [Bootstrap 5](https://getbootstrap.com/)

# 📄 Estrutura do Proxecto

Este proxecto está deseñado seguindo o patrón **Modelo-Vista-Controlador (MVC)** para garantir unha separación clara das responsabilidades, facilitar o mantemento e permitir unha evolución dinámica da páxina web de venda de produtos tecnolóxicos (como bombillas LED, enchufes intelixentes, sensores, etc.).

---

## 🧱 Estrutura de Directorios

- /proyecto
- │
- ├── /app
- │ ├── /controllers # Controladores que xestionan a lóxica da aplicación
- │ ├── /models # Modelos que interactúan coa base de datos
- │ ├── /views # Vistas HTML/PHP/Blade/JS que renderizan a UI
- │ └── /routes # Definición das rutas da aplicación
- │
- ├── /public # Arquivos públicos (CSS, JS, imaxes)
- │
- ├── /config # Configuración global da aplicación
- │
- ├── /database
- │ ├── /migrations # Migracións para estruturar a base de datos
- │ └── /seeders # Datos de proba iniciais
- │
- ├── /resources
- │ ├── /css # Estilos personalizados
- │ └── /js # Scripts da aplicación
- │
- ├── /storage # Almacenamento temporal ou permanente (ex. imaxes)
- │
- └── .env # Variables de entorno (BD, API keys, etc.)

## 🔄 Modelo-Vista-Controlador (MVC)

### 🧠 Modelo (`/models`)

Os modelos representan as entidades do negocio. Neste caso, poden incluír:

- `Producto`: nome, descrición, prezo, stock, categoría, etc.
- `Usuario`: datos de cliente ou administrador
- `Pedido`: rexistro de pedidos realizados
- `Categoria`: agrupación de produtos

Responsabilidades:

- Validación e persistencia de datos
- Definición de relacións entre entidades
- Métodos CRUD

---

### 🕹️ Controlador (`/controllers`)

Os controladores actúan como intermediarios entre os modelos e as vistas.

Exemplos:

- `ProductoController`: listar, crear, editar, borrar produtos
- `CarritoController`: engadir e quitar produtos do carro
- `PedidoController`: xestionar pedidos e pagos
- `AuthController`: xestionar autenticación

---

### 👁️ Vista (`/views`)

As vistas representan a interface de usuario.

- `inicio.blade.php`: páxina principal
- `producto.blade.php`: detalles dun produto
- `carrito.blade.php`: ver carro da compra
- `admin_dashboard.blade.php`: panel de administración

---

## 🔗 Rutas

As rutas definen os puntos de acceso da aplicación.

php
// Laravel (routes/web.php)
Route::get('/', [ProductoController::class, 'index']);
Route::get('/producto/{id}', [ProductoController::class, 'show']);
Route::post('/carrito/agregar', [CarritoController::class, 'add']);
Route::post('/pedido/crear', [PedidoController::class, 'create']);

## 🛠️ Funcionalidades Clave

- Rexistro e login de usuarios

- Catálogo dinámico de produtos

- Filtros por categoría, prezo, dispoñibilidade

- Carro da compra e historial de pedidos

- Panel de administración para xestionar produtos

## 🗃️ Modelo da Base de Datos (Relacional)

### Tabelas principais:

- productos (id, nome, descrición, prezo, stock, categoria_id)

- categorias (id, nome)

- usuarios (id, nome, email, contrasinal, tipo)

- pedidos (id, usuario_id, data, total)

- pedido_productos (pedido_id, producto_id, cantidade, prezo_unitario)

## 🛠️ Como usar

1. Clona o repositorio: git clone https://github.com/MichienWeb/probas-git.git

2. Abre index.html nun navegador para ver o proxecto en acción.

## 🎯 Obxectivo

- Este proxecto serve como práctica para aprender a:

- Usar Git e GitHub

- Organizar arquivos web

- Incorporar Bootstrap nunha páxina estática

## 👤 Autor

Feito por Adriana
