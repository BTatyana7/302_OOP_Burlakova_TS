export function createVector(x, y, z) {
  return {
    get x() {
      return x;
    },
    get y() {
      return y;
    },
    get z() {
      return z;
    },

    getLength() {
      return Math.sqrt(x ** 2 + y ** 2 + z ** 2);
    },

    add(vector) {
      return createVector(x + vector.x, y + vector.y, z + vector.z);
    },

    sub(vector) {
      return createVector(x - vector.x, y - vector.y, z - vector.z);
    },

    product(number) {
      return createVector(x * number, y * number, z * number);
    },

    scalarProduct(vector) {
      return x * vector.x + y * vector.y + z * vector.z;
    },

    vectorProduct(vector) {
      const newX = y * vector.z - z * vector.y;
      const newY = z * vector.x - x * vector.z;
      const newZ = x * vector.y - y * vector.x;
      return createVector(newX, newY, newZ);
    },

    toString() {
      return `(${x};${y};${z})`;
    },
  };
}
