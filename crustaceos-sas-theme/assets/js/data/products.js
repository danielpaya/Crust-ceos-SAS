/**
 * products.js — Crustáceos SAS
 * Datos de planes FaxShrimp, Langosta Express y productos CrustaBank
 */

export const faxShrimpPlans = [
  {
    id: 'fax-basico',
    name: 'Fax Camarón Básico',
    icon: '📠',
    price: '5 camarones/mes',
    description: 'Para antojos pequeños y decisiones impulsivas.',
    features: [
      '1 fax de camarón al mes',
      'Revisión básica de frescura',
      'Confirmación por señal de humo',
      'Soporte por email (responde una gaviota)'
    ],
    featured: false
  },
  {
    id: 'fax-ejecutivo',
    name: 'Fax Camarón Ejecutivo',
    icon: '🦐',
    price: '15 camarones/mes',
    description: 'Ideal para reuniones donde nadie sabe quién pidió comida.',
    features: [
      '5 faxes de camarón al mes',
      'Auditoría de frescura certificada',
      'Confirmación por fax de vuelta',
      'Soporte prioritario con Betty la Langosta'
    ],
    featured: true
  },
  {
    id: 'fax-urgente',
    name: 'Fax Camarón Urgente',
    icon: '⚡',
    price: '30 camarones/mes',
    description: 'Transmisión prioritaria con olor a mar certificado.',
    features: [
      'Faxes ilimitados de camarón',
      'Auditoría express de frescura',
      'Olor a mar certificado incluido',
      'Línea directa con Armando Camarones'
    ],
    featured: false
  },
  {
    id: 'fax-enterprise',
    name: 'FaxShrimp Enterprise',
    icon: '🏢',
    price: '∞ camarones/mes',
    description: 'Incluye SLA, auditoría de frescura y soporte por chat con un cangrejo.',
    features: [
      'Faxes ilimitados con SLA garantizado',
      'Auditoría de frescura en tiempo real',
      'Soporte 24/7 por chat con un cangrejo',
      'Acceso al Comité Ejecutivo del Arrecife',
      'Dashboard de métricas crustáceas'
    ],
    featured: false
  }
];

export const langosstaPlans = [
  {
    id: 'langosta-express',
    name: 'Langosta Express',
    icon: '🦞',
    price: '10 camarones',
    description: 'Para emergencias gastronómicas.',
    features: [
      'Entrega en menos de 45 minutos marítimos',
      'Empaque estándar resistente a pinzas',
      'Rastreo básico por corriente marina',
      'Riesgo de pinza: bajo'
    ],
    featured: false
  },
  {
    id: 'langosta-ejecutiva',
    name: 'Langosta Ejecutiva',
    icon: '👔',
    price: '25 camarones',
    description: 'Para cenas donde se quiere impresionar sin cocinar.',
    features: [
      'Entrega con protocolo ejecutivo',
      'Langosta con charla motivacional incluida',
      'Empaque premium con certificado de actitud',
      'Riesgo de pinza: medio'
    ],
    featured: true
  },
  {
    id: 'langosta-blindada',
    name: 'Langosta Blindada',
    icon: '🛡️',
    price: '40 camarones',
    description: 'Incluye empaque premium y protocolo antipinzas.',
    features: [
      'Empaque blindado de grado militar marino',
      'Protocolo antipinzas activado',
      'Seguro contra actitudes desafiantes',
      'Riesgo de pinza: controlado'
    ],
    featured: false
  },
  {
    id: 'langosta-vip',
    name: 'Langosta VIP',
    icon: '👑',
    price: '75 camarones',
    description: 'Llega con confirmación telefónica y actitud superior.',
    features: [
      'Confirmación telefónica pre-entrega',
      'Langosta con actitud superior certificada',
      'Escolta de camarones de seguridad',
      'Alfombra roja acuática incluida',
      'Riesgo de pinza: digno'
    ],
    featured: false
  }
];

export const crustaBankProducts = [
  {
    id: 'cuenta-ahorro',
    name: 'Cuenta de Ahorro en Camarones',
    icon: '🏦',
    description: 'Guarde sus camarones con intereses frescos y rentabilidad salada.'
  },
  {
    id: 'credito-langosta',
    name: 'Crédito Rotativo de Langosta',
    icon: '💳',
    description: 'Financiamiento flexible con tasa de interés ajustada a la marea.'
  },
  {
    id: 'cdt-jaiba',
    name: 'CDT de Jaiba',
    icon: '📊',
    description: 'Inversión a término fijo. La rentabilidad no se garantiza, pero el olor a mar sí.'
  },
  {
    id: 'seguro-antipinzas',
    name: 'Seguro Antipinzas',
    icon: '🛡️',
    description: 'Protección completa contra ataques de pinza no autorizados.'
  },
  {
    id: 'tarjeta-camaron-black',
    name: 'Tarjeta Camarón Black',
    icon: '💎',
    description: 'La tarjeta de crédito más exclusiva del arrecife. Límite: depende de la marea.'
  },
  {
    id: 'leasing-cangrejo',
    name: 'Leasing de Cangrejo Corporativo',
    icon: '🦀',
    description: 'Alquile un cangrejo para sus operaciones empresariales. Incluye mantenimiento de pinzas.'
  }
];
