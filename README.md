# Universidad Politécnica Territorial de Aragua (UPTA)
## PNF en Ingeniería en Informática

### Integrantes del Equipo:
* Sergio Enrique Ojeda Rojas C.I: 31.261.016
* Cleibel Rafael Campos Sanchez C.I: 31.725.668

---

### Enunciado Asignado:
**10. E-commerce:**
Crear entidad Pedido con los siguientes atributos:
* ID
* CodigoRastreo: string
* Total: decimal
* CantidadItems: integer
* Pagado: boolean

---

### Instrucciones de Instalación y Ejecución

Sigue estos pasos para levantar el proyecto en tu entorno local:

1.  **Clonar el repositorio y entrar a la carpeta:**
    ```bash
    git clone [URL_DEL_TU_REPOSITORIO]
    cd [NOMBRE_DE_LA_CARPETA]
    ```

2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```

3.  **Instalar dependencias de Frontend:**
    ```bash
    npm install && npm run build
    ```

4.  **Configurar el entorno:**
    * Duplica el archivo de ejemplo para crear tu configuración:
        ```bash
        cp .env.example .env
        ```
    * Abre el archivo `.env` y configura  tu base de datos (`DB_DATABASE`).

5.  **Generar la clave de la aplicación:**
    ```bash
    php artisan key:generate
    ```

6.  **Ejecutar migraciones (Crear tablas en la BD):**
    ```bash
    php artisan migrate
    ```

7.  **Iniciar el servidor local:**
    ```bash
    php artisan serve
    ```

El sistema estará disponible en: `http://localhost:8000`