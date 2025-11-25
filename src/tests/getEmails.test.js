import { expect } from "chai";
import { describe, it } from "vitest";

function getEmails(email = "") {
  const emailTrim = email.replaceAll(" ", "");
  return emailTrim.split(",");
}

describe("getEmails", () => {
  it("retorna una lista con los correos electronicos", () => {
    expect(getEmails("holasoylacra@gmail.com")).toStrictEqual([
      "holasoylacra@gmail.com",
    ]);
  });

  it("retorna una lista con los correos electronicos", () => {
    expect(
      getEmails("holasoylacra@gmail.com, abrahamalfonzo@gmail.com")
    ).toStrictEqual(["holasoylacra@gmail.com", "abrahamalfonzo@gmail.com"]);
  });
});
