function Car( model, year, miles ) {

    this.model = model;
    this.year = year;
    this.miles = miles;

    // toString() us redefined for each of the new objects created using the Car constructor.
    // This isn't very optimal as the function should ideally be shared between all of the instances of the Car type.
    this.toString = function () {
        return this.model + " has done " + this.miles + " miles";
    };
}

// Usage:

// We can create new instances of the car
var civic = new Car( "Honda Civic", 2009, 20000 );
var mondeo = new Car( "Ford Mondeo", 2010, 5000 );

// and then open our browser console to view the
// output of the toString() method being called on
// these objects
console.log( civic.toString() );
console.log( mondeo.toString() );