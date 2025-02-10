import { Container } from "@/components/Container";
import { Heading } from "@/components/Heading";
import { Highlight } from "@/components/Highlight";
import { Paragraph } from "@/components/Paragraph";
import { Products } from "@/components/Products";
import { TechStack } from "@/components/TechStack";
import Image from "next/image";

export default function Home() {
  return (
    <Container>
      <span className="text-4xl">👋</span>
      <Heading className="font-black">Hello there! I&apos;m Yvonne Ong</Heading>
      <Paragraph className="max-w-xl mt-4">
        I&apos;m a housewife that loves{" "}
        <Highlight>drawing & sculpting</Highlight> and create miniature real life object that can let 
        people relive in that moment
      </Paragraph>
      <Paragraph className="max-w-xl mt-4">
        I&apos;m also a part-time artist with{" "}
        <Highlight>3 years of experience</Highlight> teaching people aged from {" "}
        <Highlight>9 to 55 years old</Highlight>
        that are thrilled to learn how to draw and sculp.
      </Paragraph>
      <Heading
        as="h2"
        className="font-black text-lg md:text-lg lg:text-lg mt-20 mb-4"
      >
        What I&apos;ve been working on
      </Heading>
      <Products />
      <TechStack />
    </Container>
  );
}
