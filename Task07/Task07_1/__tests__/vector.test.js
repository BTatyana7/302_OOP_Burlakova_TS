import { createVector } from '../vector';

describe('Vector', () => {
  let vector;

  beforeEach(() => {
    vector = createVector(1, 2, 3);
  });

  test('Проверка метода getLength', () => {
    expect(vector.getLength()).toBeCloseTo(3.74165738677);
  });

  test('Проверка метода add', () => {
    const vector2 = createVector(4, 5, 6);
    const sumVector = vector.add(vector2);
    expect(sumVector.x).toBe(5);
    expect(sumVector.y).toBe(7);
    expect(sumVector.z).toBe(9);
  });

  test('Проверка метода sub', () => {
    const vector2 = createVector(1, 2, 3);
    const diffVector = vector.sub(vector2);
    expect(diffVector.x).toBe(0);
    expect(diffVector.y).toBe(0);
    expect(diffVector.z).toBe(0);
  });

  test('Проверка метода product', () => {
    const productVector = vector.product(2);
    expect(productVector.x).toBe(2);
    expect(productVector.y).toBe(4);
    expect(productVector.z).toBe(6);
  });

  test('Проверка метода scalarProduct', () => {
    const vector2 = createVector(4, 5, 6);
    const scalarProduct = vector.scalarProduct(vector2);
    expect(scalarProduct).toBe(32);
  });

  test('Проверка метода vectorProduct', () => {
    const vector2 = createVector(4, 5, 6);
    const vectorProduct = vector.vectorProduct(vector2);
    expect(vectorProduct.x).toBe(-3);
    expect(vectorProduct.y).toBe(6);
    expect(vectorProduct.z).toBe(-3);
  });

  test('Проверка метода toString', () => {
    expect(vector.toString()).toBe('(1;2;3)');
  });
});