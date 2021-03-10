# Import de la classe Dice depuis le fichier dice.py
from dice import Dice

class Dices:
    """
    Création d'une classe gérant 2 dés
    """

    def __init__(self):
        """
        Constructeur. Aucun paramètre nécessaire
        """

        # création d'un attribut "dice1" représentant 1 dé
        self.dice1 = Dice()
        # création d'un attribut "dice1" représentant 1 autre dé
        self.dice2 = Dice()
        # création d'un attribut représentant la somme des 2 dés
        self.sum_dices = 0

    def roll(self):
        """
        Méthode permettant de lancer tous les dés.
        """
        self.dice1.roll()
        self.dice2.roll()
        # mise à jour de la somme des dés une fois lancés
        self.sum_dices = self.get_sum()

    def get_sum(self):
        """
        Méthode permettant de récupérer la valeur de la somme des dés.
        """
        return self.dice1 + self.dice2

    def is_double(self):
        """
        Méthode permettant de savoir si un double a été effectué ou non.
        """
        return self.dice1 == self.dice2

if __name__ == "__main__":
    pass