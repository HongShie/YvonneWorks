import { Container } from "@/components/Container";
import { Heading } from "@/components/Heading";
import { Arts } from "@/components/Arts";
import { Metadata } from "next";

export const metadata: Metadata = {
  title: "Art | YvonneWorks",
  description:
    "John Doe is a developer, writer and speaker. He is a digital nomad and travels around the world while working remotely.",
};

export default function Projects() {
  return (
    <Container>
      <span className="text-4xl">🎨</span>
      <Heading className="font-black mb-10">
        {" "}
        Art Series
      </Heading>

      <Arts />
    </Container>
  );
}
