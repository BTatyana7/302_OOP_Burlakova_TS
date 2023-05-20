import Vector from '../vector';

describe('Vector', () => {
  let vector1;
  let vector2;

  beforeEach(() => {
    vector1 = new Vector(1, 2, 3);
    vector2 = new Vector(4, 5, 6);
  });

  it('Проверка метода get', () => {
    expect(vector1.length).toBeCloseTo(3.74165738677);
  });

  it('Проверка метода add', () => {
    const sum = vector1.add(vector2);
    expect(sum.x).toBe(5);
    expect(sum.y).toBe(7);
    expect(sum.z).toBe(9);
  });

  it('Проверка метода sub', () => {
    const difference = vector1.sub(vector2);
    expect(difference.x).toBe(-3);
    expect(difference.y).toBe(-3);
    expect(difference.z).toBe(-3);
  });

  it('Проверка метода product', () => {
    const product = vector1.product(2);
    expect(product.x).toBe(2);
    expect(product.y).toBe(4);
    expect(product.z).toBe(6);
  });

  it('Проверка метода scalarProduct', () => {
    const scalarProduct = vector1.scalarProduct(vector2);
    expect(scalarProduct).toBe(32);
  });

  it('Проверка метода vectorProduct', () => {
    const vectorProduct = vector1.vectorProduct(vector2);
    expect(vectorProduct.x).toBe(-3);
    expect(vectorProduct.y).toBe(6);
    expect(vectorProduct.z).toBe(-3);
  });

  it('Проверка метода toString', () => {
    const str = vector1.toString();
    expect(str).toBe('(1, 2, 3)');
  });
});
