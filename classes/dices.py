from dice import Dice

class Dices:

    def __init__(self):
        self.dice1 = Dice()
        self.dice2 = Dice()
        self.sum_dices = 0

    def roll(self):
        self.dice1.roll()
        self.dice2.roll()
        self.sum_dices = self.get_sum()

    def get_sum(self):
        return self.dice1 + self.dice2

    def is_double(self):
        return self.dice1 == self.dice2

if __name__ == "__main__":
    pass