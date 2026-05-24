/**
 * tickets.js — Crustáceos SAS
 * Categorías de ticket, prioridades y respuestas de Patricia Percebes
 */

export const ticketCategories = [
  { id: 'extraviado',       label: 'Camarón extraviado',                   icon: '🔎' },
  { id: 'actitud',          label: 'Langosta con actitud desafiante',      icon: '😤' },
  { id: 'olor-lunes',       label: 'Pedido con olor a lunes',             icon: '📦' },
  { id: 'conectividad',     label: 'Problema de conectividad con el océano', icon: '🌊' },
  { id: 'pinza-pasiva',     label: 'Reclamo por pinza pasivo-agresiva',   icon: '🦀' },
  { id: 'fax-energia',      label: 'Fax recibido con mala energía',       icon: '📠' },
  { id: 'duplicado',        label: 'Sospecha de crustáceo duplicado',     icon: '👯' },
  { id: 'pinza-no-autorizada', label: 'Incidente de pinza no autorizada', icon: '⚠️' }
];

export const ticketPriorities = [
  { id: 'baja',    label: 'Baja',    description: 'El camarón está pensativo.',           color: 'green' },
  { id: 'media',   label: 'Media',   description: 'La langosta ignora instrucciones.',    color: 'yellow' },
  { id: 'alta',    label: 'Alta',    description: 'El pedido se mueve solo.',             color: 'coral' },
  { id: 'critica', label: 'Crítica', description: 'El cangrejo de soporte renunció.',     color: 'danger' }
];

export const patriciaResponses = [
  'Su caso fue asignado a Patricia Percebes. Tiempo estimado de respuesta: cuando termine de sufrir por logística.',
  'Patricia Percebes revisará su caso entre un café con leche de mar y una queja existencial.',
  'Su ticket fue recibido. Patricia dice que no es su culpa, pero lo resolverá igual.',
  'Patricia confirma recepción del ticket. Cita textual: "Mi vida no está para tickets de baja prioridad."',
  'El caso fue escalado al escritorio de Patricia. Ella lo mirará cuando termine de gestionar una crisis emocional de camarones.',
  'Patricia asegura que su problema tiene solución. No sabe cuál, pero está segura de que la hay.'
];

/**
 * Genera un ID de ticket aleatorio tipo TCK-MAR-XXX
 */
export function generateTicketId() {
  const num = Math.floor(Math.random() * 900) + 100;
  const suffixes = ['MAR', 'PIN', 'FAX', 'LNG', 'CRB', 'SAL'];
  const suffix = suffixes[Math.floor(Math.random() * suffixes.length)];
  return `TCK-${suffix}-${num}`;
}
