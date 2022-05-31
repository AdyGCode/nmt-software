require('./bootstrap');

import Alpine from 'alpinejs';
import Dropzone from './dropzone';

window.Alpine = Alpine;
window.Dropzone = Dropzone;

Alpine.start();
