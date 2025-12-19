# Prueba de Desarrollo de Plataformas

**Estudiante:** Kelvin Piñero  
**Fecha:** 19/12/2025  
**Paralelo:** 2
https://github.com/pinerokelvin169/videojuegos
---

## Decisiones de Diseño

### 1. Tabla

**Nombre de la tabla:**  
videojuegos

**Campos:**

| Campo | Tipo | ¿Obligatorio? |
|------|------|----------------|
| id | bigint | Sí |
| titulo | char(150) | Sí |
| modulo | char(100) | Sí |
| gravedad | char(8) | Sí |
| estado | char(3) | Sí |
| pasos_reproduccion | text | Sí |
| created_at | timestamp | Sí |
| updated_at | timestamp | Sí |

---

### 2. Tipos de gravedad

El sistema maneja videojuegos y sus bugs, los cuales se clasifican según su nivel de gravedad: **Baja, Media, Alta y Crítica**.

---

### 3. ¿Se puede eliminar registros?

**Respuesta:**  
No.

**Razón (1 línea):**  
Los registros no se eliminan para mantener el historial y seguimiento del estado de los bugs, entonces por eso se hace solo cambio de estado y en la vista se muestran solo los que no estan en estado FIX.
