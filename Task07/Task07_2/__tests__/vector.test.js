import Vector from '../vector';

describe('Vector', () => {
  let vector1;
  let vector2;

  beforeEach(() => {
    vector1 = new Vector(1, 2, 3);
    vector2 = new Vector(4, 5, 6);
  });

  test('Проверка метода getLength', () => {
    expect(vector1.getLength()).toBeCloseTo(3.74165738677);
  });

  test('Проверка метода add', () => {
    const sumVector = vector1.add(vector2);
    expect(sumVector.x).toBe(5);
    expect(sumVector.y).toBe(7);
    expect(sumVector.z).toBe(9);
  });

  test('Проверка метода sub', () => {
    const diffVector = vector1.sub(vector2);
    expect(diffVector.x).toBe(-3);
    expect(diffVector.y).toBe(-3);
    expect(diffVector.z).toBe(-3);
  });

  test('Проверка метода product', () => {
    const productVector = vector1.product(2);
    expect(productVector.x).toBe(2);
    expect(productVector.y).toBe(4);
    expect(productVector.z).toBe(6);
  });

  test('Проверка метода scalarProduct', () => {
    const scalarProduct = vector1.scalarProduct(vector2);
    expect(scalarProduct).toBe(32);
  });

  test('Проверка метода vectorProduct', () => {
    const vectorProduct = vector1.vectorProduct(vector2);
    expect(vectorProduct.x).toBe(-3);
    expect(vectorProduct.y).toBe(6);
    expect(vectorProduct.z).toBe(-3);
  });

  test('Проверка метода toString', () => {
    expect(vector1.toString()).toBe('(1;2;3)');
  });
});