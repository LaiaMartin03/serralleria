import '../css/components/Menu.scss';

import { ShoppingCart, Heart, UserRound } from 'lucide-react';

const Menu = () => {
    return (
        <div id="menu">
            <img src="logoweb.png" alt="" className="logo" />
            <div className='options'>
                <a href="" id='profile'><UserRound /></a>
                <a href="" id='cart'><ShoppingCart /></a>
                <a href="" id='wishlist'><Heart /></a>
            </div>
        </div>
    )
}

export default Menu