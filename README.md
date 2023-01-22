# Beaver Menu Hamburger

Beaver Menu Hamburger is an easy addon to replace the menu icon for the Beaver Builder Menu Module with a CSS animated icon.

It's based entirely on work done by Jonsuh: https://github.com/jonsuh/hamburgers

---
## Usage

Install and activate plugin

By default the 'elastic' effect is activated. You can currently select another effect by adding a filter to your theme's functions.php:

    add_filter( 'menuhamburger/effect' , function( $effect ) { return 'slider' } ) ;

You can select from the following effects:

- slider
- squeeze
- arrow
- arrowalt
- spin
- elastic
- emphatic
- collapse
- vortex
- stand
- spring
- 3dx
- 3dy
- boring
- minus