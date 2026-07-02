# Sesión: CV + Cover Letter para B. Braun SE — AI & ML Engineer
*Resumen para uso en futuras instancias de Claude. Subir junto con los archivos relevantes.*

## Puesto objetivo
**AI & ML Engineer (f/m/d)** — B. Braun SE, Melsungen, Hesse  
Contacto: Maren Siebert | +495661717685  
Equipo: Data Intelligence & Data Innovation

## Estrategia general
Juan viene de XR development (6 años). No es un candidato perfecto para este puesto, pero aplica con intención genuina de transicionar a AI/ML. La estrategia acordada:
- Ser proactivo sobre el gap de background, no esquivarlo
- Posicionarse como alguien con bases académicas reales en ML + experiencia práctica con LLMs
- Resaltar capacidad de aprender rápido demostrada en startups
- Mencionar ventajas prácticas: proximidad a Melsungen (~30 min), permiso de trabajo, español nativo, inglés C2, alemán en progreso hacia B1

## Archivos modificados en esta sesión

### CV: `english_resume_v2_bbrain.tex`
Basado en `english_resume_v2.tex` (plantilla FAANGPath, clase `resume.cls`).  
Cambios aplicados:

1. **Summary nuevo al inicio:** Posiciona la transición de carrera directamente. Menciona MSc con ML clásico, integración práctica de LLMs, y objetivo de moverse a AI/ML.

2. **Skills reordenados:**
   - AI/ML sube al tope: SVMs, K-means, regresión/clasificación, behaviour trees
   - AI Integration: ChatGPT API (custom pipelines), Microsoft Cognitive Services, ElevenLabs
   - Python sale de "Additional" y aparece en su propia fila de Languages junto a C# y C++

3. **Experience — Freelance (wellness app):** Bullet expandido para mencionar "async socket-based communication with a custom LLM pipeline" y "contributed to prompt design."

4. **Experience — Interco (NPC AI):** Bullet expandido para mencionar explícitamente "behaviour trees + pathfinding."

5. **Education — MSc Utrecht:** Se agrega nota sobre análisis cuantitativo con modelos estadísticos en tesis.

6. **Education — BSc UNAM:** "Computer Learning" cambiado a "Machine Learning" para mayor legibilidad ante recruiters de AI.

7. **Sección renombrada:** "CONFERENCES" → "CONFERENCES & AWARDS". El hackathon (XR Creator Con 2024, 2nd place) se movió de Freelance Experience a esta sección.

### Cover Letter: `coverletter_bbrain.tex`
Documento LaTeX standalone (no requiere `resume.cls`). Compila con paquetes estándar en Overleaf.

Estructura:
- Header: nombre, dirección, teléfono, email (sin LinkedIn ni sitio web)
- Destinatario: B. Braun SE / Maren Siebert
- Sin línea "Re:" de asunto
- Cierre: "Kind regards" + "Thank you for your time and I hope I can hear back from you"

## Perfil de AI/ML de Juan (para futuros ajustes)

**Académico (MSc Utrecht — fuente principal):**
- SVMs, K-means clustering, regresión, clasificación
- Reinforcement learning, constraint satisfaction problems
- ML for Games (Unity)
- Análisis estadístico con Student's t-distribution en tesis

**Académico (BSc UNAM — superficial, no enfatizar):**
- Genetic algorithms, redes neuronales, algunas otras cosas básicas

**Práctico:**
- Integración de ChatGPT API via sockets con pipeline custom (contribuyó al prompt design)
- Microsoft Cognitive Services (STT + TTS)
- Behaviour trees + pathfinding para NPC AI
- NO tiene experiencia con: RAG, LangChain, LlamaIndex, Azure ML, embeddings, vectorDBs

**Python:**
- Nivel funcional: herramientas propias, material didáctico, autoevaluador de tareas en C
- Adaptó los primeros 6 módulos del curso CS188 de Berkeley al español con ejemplos en Python (recreados desde cero, sin acceso al código original). No incluir esto en CV ni cover letter como proyecto propio.

## Reglas de estilo para Juan (importantes)
- **Sin em-dashes** bajo ninguna circunstancia. Es una señal clara de texto generado con AI y Juan lo rechaza explícitamente.
- Párrafos cortos y directos.
- Sin buzzwords ni frases que "suenen a AI."
- Cover letters abren con "I am writing to state my interest."
- Cover letters cierran con "Thank you for your time and I hope I can hear back from you."
- Sin línea "Re:" de asunto en cover letters.
- El alemán siempre se enmarca positivamente (en progreso, no como disculpa).
- El gap de freelance (2023-presente) se menciona de frente, no se esquiva.
