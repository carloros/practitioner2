import {task} from '../model'

const template= `
<h1>${task.name}</h1>
<ul>
    <li>Descripció: ${task.description}</li>
    <li>Completada: ${task.completed}</li>
</ul>
`

export { template }