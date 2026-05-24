/**
 * equipo.js — Crustáceos SAS
 * Lógica de la página del equipo: renderiza tarjetas de personaje
 */

import { characters } from '../data/characters.js';
import { renderCharacterCards } from '../components/characterCard.js';

document.addEventListener('DOMContentLoaded', () => {
  renderCharacterCards('equipo-grid', characters);
});
