class Vector {
    constructor(x, y, z) {
        this.x = x;
        this.y = y;
        this.z = z;
    }

    get length() {
        return Math.sqrt(this.x ** 2 + this.y ** 2 + this.z ** 2);
    }

    add(vector) {
        return new Vector(this.x + vector.x, this.y + vector.y, this.z + vector.z);
    }

    sub(vector) {
        return new Vector(this.x - vector.x, this.y - vector.y, this.z - vector.z);
    }

    product(number) {
        return new Vector(this.x * number, this.y * number, this.z * number);
    }

    scalarProduct(vector) {
        return this.x * vector.x + this.y * vector.y + this.z * vector.z;
    }

    vectorProduct(vector) {
        const x = this.y * vector.z - this.z * vector.y;
        const y = this.z * vector.x - this.x * vector.z;
        const z = this.x * vector.y - this.y * vector.x;
        return new Vector(x, y, z);
    }

    toString() {
        return `(${this.x}, ${this.y}, ${this.z})`;
    }
}

export default Vector;