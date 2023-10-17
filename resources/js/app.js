import './bootstrap';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import persist from '@alpinejs/persist'

// Alpine.plugin(persist);

document.addEventListener('alpine:init', () => {
    Alpine.directive('dark-mode', (el, _, {Alpine})=>{
        Alpine.bind(el, () => ({
            'x-data'(){
                return {
                    darkMode: this.$persist(window.matchMedia('(prefers-color-scheme: dark)').matches),
                    isDarkMode(){
                        return this.darkMode;
                    },
                    toggle() {
                        this.darkMode = !this.darkMode;
                    }
                }
            },
            'x-effect'(){
                document.documentElement.classList.toggle('dark', this.$data.darkMode);
            }
        }))
    });

    Alpine.magic('darkMode', (el, {Alpine}) => {
        return Alpine.$data(el);
    });
})

Livewire.start();
