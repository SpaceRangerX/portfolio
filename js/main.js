import '../sass/main.scss'
import $ from 'jquery';
import Player from '@vimeo/player';

window.ditto = {
    menu: (el) => {
        $(el).toggleClass('open');
    }
}