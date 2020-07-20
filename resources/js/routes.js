import Logo from './components/Logo.vue';
import LogoSymbol from './components/Logo-Symbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustration from './components/Illustration';
import LoadersAndAnimation from './components/LoadersAndAnimation';
import Wallpapers from './components/Wallpapers';
import SiteStats from './components/SiteStats';
import NotFound from './components/NotFound';


export default{

    mode:'history',

    linkActiveClass:'font-weight-bold',

    routes:[
        {
            path : '*' ,
            component : NotFound

        },
        {
            path : '/' ,
            component : Logo

        },
        {
            path : '/logo-symbol',
            component : LogoSymbol,
            name: 'logo-symbol'
        },
        {
            path : '/colors' ,
            component : Colors

        },
        {
            path : '/typography',
            component : Typography
        },
        {
            path : '/mascot',
            component : Mascot
        },
        {
            path : '/sitestats',
            component : SiteStats
        },
        {
            path : '/illustration',
            component : Illustration
        },
        {
            path : '/loaders-animation',
            component : LoadersAndAnimation
        },
        {
            path : '/wallpapers',
            component : Wallpapers
        }
    ]
}
