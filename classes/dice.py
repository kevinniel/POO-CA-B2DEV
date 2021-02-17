from random import randint

class Dice:

    def __init__(self, nb_face = 6):
        self.nb_face = nb_face
        self.current_value = 0

    def roll(self):
        self.current_value = randint(1, self.nb_face)

    def pick_a_number(self, choosen_number):
        self.current_value = choosen_number

    def __add__(self, other):
        return self.current_value + other.current_value

    def __eq__(self, other):
        return self.current_value == other.current_value

if __name__ == "__main__":
    dice1 = Dice()
    dice2 = Dice()
    print(
        dice1 == dice2
    )

    