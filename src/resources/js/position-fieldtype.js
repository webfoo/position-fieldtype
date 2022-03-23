import Fieldtype from './../components/position-fieldtype';

Statamic.booting(() => {
    Statamic.$components.register('position-fieldtype', Fieldtype);
});
