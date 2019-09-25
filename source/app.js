//import greeting from './templates/greeting.js'
import helpers from '../helpers.js';

import {template} from './templates/task'

document.body.innerHTML = template

helpers.log('prova')
helpers.saludar()
const result = helpers.suma(1, 2)
console.log(result);
