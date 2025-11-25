import { expect } from "chai";
import { describe, it } from "vitest";

function getEmails(email = "") {
  const regex = /w/
  const listEmails = email.match(regex)
}

describe("getEmails", () => {
  it("retorna una lista con los correos electronicos",()=>{
    expect(getEmails("holasoylacra@gmail.com"))
  })
});
