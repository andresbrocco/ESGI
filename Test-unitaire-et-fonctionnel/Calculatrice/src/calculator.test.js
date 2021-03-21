import { expect } from "chai";
import { add, mul, sub, div, avg } from "./calculator";

describe("Calculator", () => {
	it("return sum of 2 numbers.", () => {
		const num1 = 5;
		const num2 = 7;
		const expected = 12;
		const actual = add(num1, num2);
		expect(actual).to.equal(expected);
	});

	it("return subtraction of 2 numbers.", () => {
		const num1 = 5;
		const num2 = 7;
		const expected = -2;
		const actual = sub(num1, num2);
		expect(actual).to.equal(expected);
	});

	it("return multiplication of 2 numbers.", () => {
		const num1 = 5;
		const num2 = 7;
		const expected = 35;
		const actual = mul(num1, num2);
		expect(actual).to.equal(expected);
	});

	it("return division of 2 numbers.", () => {
		const num1 = 6;
		const num2 = 12;
		const expected = 0.5;
		const actual = div(num1, num2);
		expect(actual).to.equal(expected);
	});

	it("return average of 2 numbers.", () => {
		const num1 = 6;
		const num2 = 12;
		const expected = 9;
		const actual = avg(num1, num2);
		expect(actual).to.equal(expected);
	});
});
