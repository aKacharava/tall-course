import axios from 'axios';
import { Alpine } from "../../vendor/livewire/livewire/dist/livewire.esm.js";

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Alpine = Alpine;

Alpine.start();
