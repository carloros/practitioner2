const helpers = require ('../helpers2')

test('Suma function returns 3 when we pass 2 & 1', function () {
    
    //Prepare

    //Execute
    const resultat = helpers.suma(2, 1)

    //Check
    expect(resultat).toBe(3)

})

// TDD -> Test Driven Developement

test('Multiply function returns 50 when we pass 5 & 10', () => {

    const resultat = helpers.multiply(5, 10)

    expect(resultat).toBe(50)

})

// test('Suma function returns 3 when we pass 2 and 1', () => {
    
// })