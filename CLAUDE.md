---
project_name: ProgramacionIII
project_type: "academic-third-semester"
complexity: "medium"
technologies: "typescript, angular-9, firebase, ionic, angular-fire"
description: "Programación III - Tercer parcial + Ionic PWA + Firebase + Angular v9"
status: "active"
role_match: "Mobile Developer, PWA Developer, Firebase Developer"
---

# 📌 ProgramacionIII

## 🎯 Descripción

**Tercer Parcial** de **Programación III**.
Contiene PWA en Ionic con Firebase + Angular v9 + Material Design.

**Archivos principales:**
- `src/` - Código fuente Ionic
- `e2e/` - Tests E2E con Protractor
- `karma.conf.js` - Configuración de tests
- `tsconfig.json` - Configuración TypeScript
- `angular.json` - Configuración Angular v9

## 🛠️ Tecnologías

- **Lenguajes:** TypeScript, JavaScript
- **Frameworks:** Angular v9.x
- **Mobile:** Ionic v4.x
- **Database:** Firebase Firestore
- **Auth:** Firebase Authentication
- **UI:** Ionic Components + Angular Material
- **Testing:** Jasmine, Karma, Protractor

## 📁 Estructura del Proyecto

```
ProgramacionIII/
├── CLAUDE.md              ← Este archivo
├── .claude/               ← Configuración
│   ├── settings.json
│   ├── agents/
│   ├── commands/
│   ├── hooks/
│   ├── rules/
│   └── skills/
├── .git/
├── angular.json           ← Configuración Angular v9
├── package.json
├── package-lock.json
├── karma.conf.js
├── tsconfig.json
├── tsconfig.spec.json
├── tslint.json
├── e2e/                   ← Tests E2E con Protractor
├── src/                   ← Código fuente Ionic
├── README.md
├── Screenshots/           ← Capturas de prueba
└── e2e/
    ├── e2e.ts
    ├── page-object-model.ts
    └── tsconfig.json
```

## 📦 Dependencias Principales

```json
{
  "@angular/animations": "^9.0.0",
  "@angular/cdk": "^9.0.0",
  "@angular/common": "^9.0.0",
  "@angular/core": "^9.0.0",
  "@angular/fire": "^6.1.0",
  "@angular/forms": "^9.0.0",
  "@angular/platform-browser": "^9.0.0",
  "@angular/platform-browser-dynamic": "^9.0.0",
  "@angular/router": "^9.0.0",
  "firebase": "^7.18.0",
  "ionic-native": "^5.7.0",
  "ionic-angular": "^4.3.5",
  "rxjs": "^6.5.4",
  "zone.js": "~0.10.2"
}
```

## 🚀 Comandos Útiles

```bash
# Instalar dependencias
npm install

# Ejecutar en desarrollo
ng serve

# Build para producción
ng build

# Ejecutar tests
npm test

# Linting
ng lint

# Generar Ionic
ionic serve
```

## 💡 Puntos Clave para el Desarrollador

1. **Ionic PWA:** Aplicación móvil en PWA
2. **Firebase:** Autenticación y datos en Firestore
3. **Angular v9:** Versión con Ivy compiler
4. **Native plugins:** Ionic Native para APIs de dispositivo
5. **Material Design:** UI consistente con Ionic
6. **Testing:** Jasmine, Karma, Protractor

## 🔒 Seguridad y restricciones

- **NUNCA** commitear `node_modules/`
- **NUNCA** commitear `.env` ni credenciales Firebase
- **NUNCA** hardcodear API keys de Firebase
- **NUNCA** commitear `package-lock.json` sin revisión
- Validar y sanitizar todos los inputs

## 📝 Contexto del Proyecto

- **Asignatura:** Programación III
- **Periodo:** Actual
- **Tipo:** Tercer parcial (Mobile)
- **Enfoque:** PWA, Ionic, Firebase
- **Audiencia:** Estudiantes de desarrollo móvil

---
*Memoria de proyecto generada por Claude*
