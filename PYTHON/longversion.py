import os
import time

#PARENT CLASS
class Undead:
    taken_names = []
    
    def __init__(self, name=None, hp=None):
        if name != None and hp != None:
            self.__hp = hp
            self.__name = "Undead" + name
        else:
            self.__hp = 100
            self.__name = "Undead"
            self.__isDead = False
    
    # dead is a boolean
    def isDead(self, dead = None):
        if dead == None:
            return self.__isDead
        else:
            self.__isDead = dead
            
    def getName(self):
        return self.__name
    
    def getHP(self):
        return self.__hp
    
    def setName(self, name):
        self.__name = name
    
    def setHP(self, hp=None, multiplier=None):
        if multiplier == None:
            self.__hp = hp
        else:
            self.__hp = self.__hp * multiplier

    def status(self):
        if self.isDead():
            print(self.getName(), "-", self.getType(), "is dead")
        else:
            print(self.getName(), "-", self.getType(), "is alive")
    
    def create_character(self):
        os.system("cls")
        print("=========CREATE CHARACTER=========")

#CHILD CLASS
class Zombie(Undead):
    
    def __init__(self):
        super().__init__()
        self.create_character()
        self.setName(input("Create name: "))
        while self.getName() in self.taken_names:
            print("Name already taken!")
            pause()
            os.system("cls")
            print("=========CREATE CHARACTER=========")
            self.setName(input("Create a different name: "))
        self.taken_names.append(self.getName())
        self.create_character()
        print("Name: ", self.getName(), "\nType:", self.getType(),"\nHP:", self.getHP(),"\n")
        self.getAbilities()

    def skill(self, undead):
        if isinstance(undead, Undead):
            if not self.isDead():
                if not undead.isDead():
                    hp_gain = int(undead.getHP() * .5)
                    damage = hp_gain
                    self.setHP(self.getHP() + hp_gain)
                    print(self.getName(), "-", self.getType(), "ate", undead.getName(), "-", undead.getType())
                    print(self.getName(), "-", self.getType(), "gain", hp_gain, "HP")

                    damage = hp_gain * .1 if isinstance(undead, Ghost) else damage
                        
                    undead.setHP(undead.getHP() - damage)
                    print(undead.getName(), "-", undead.getType(), "lose", damage, "HP")

                    if undead.getHP() <= 0:
                        undead.setHP(0)
                        undead.isDead(True)
                        undead.status()

                else:
                    print("Target", end=" ")
                    undead.status()

            else:
                self.status()
                        
        else:
            print("Wrong Target")
        pause()

    def attack(self, undead):
        if isinstance(undead, Undead):
            if not self.isDead():
                if not undead.isDead():
                    if self.getHP() > 50:
                        damage = self.getHP() * .5
                        print(self.getName(), "-", self.getType(), "Attacked", undead.getName(), "-", self.getType())
                        
                        if isinstance(undead, Ghost):
                            damage = damage * .1

                        undead.setHP(undead.getHP() - damage)
                        print(undead.getName(), "-", damage)

                        if undead.getHP() <= 0:
                            undead.setHP(0)
                            undead.isDead(True)
                            undead.status()

                    else:
                        print(self.getName(), "-", self.getType(), "can't attack HP is less than 50")
                
                else:
                    print("Target", end=" ")
                    undead.status()
            
            else:
                self.status()
                        
        else:
            print("Wrong Target")
        pause()
        
    def getAbilities(self):
        print("Abilities:")
        print("1. Attack")
        print("    - Dmg. 50% of my HP")
        print("2. Eat")
        print("    - HP increase Amt. 50% of opponent HP")
        print("    - Dmg. 50% of opponent HP")
  
    def getStatus(self):
        print(self.getName(), "-", self.getType())
        print("HP: ", self.getHP())
        print("State:", "Dead" if self.isDead() else "Alive")

    def getType(self):
        return "Zombie"
class Vampire(Undead):

    def __init__(self):
        super().__init__()
        self.setHP(120)
        self.create_character()
        self.setName(input("Create name: "))
        while self.getName() in self.taken_names:
            print("Name already taken!")
            pause()
            os.system("cls")
            print("=========CREATE CHARACTER=========")
            self.setName(input("Create a different name: "))
        self.taken_names.append(self.getName())
        self.create_character()
        print("Name: ", self.getName(), "\nType:", self.getType(),"\nHP:", self.getHP(),"\n")
        self.getAbilities()

    def skill(self, undead):
        if isinstance(undead, Undead):
            if not self.isDead():
                if not undead.isDead():
                    hp_gain = int(undead.getHP() * .8)
                    damage = hp_gain
                    self.setHP(self.getHP() + hp_gain)
                    print(self.getName(), "-", self.getType(), "bit", undead.getName(), "-", undead.getType())
                    print(self.getName(), "-", self.getType(), "gain", hp_gain, "HP")

                    damage = hp_gain * .1 if isinstance(undead, Ghost) else damage
                        
                    undead.setHP(undead.getHP() - damage)
                    print(undead.getName(), "-", undead.getType(), "lose", damage, "HP")

                    if undead.getHP() <= 0:
                        undead.setHP(0)
                        undead.isDead(True)
                        undead.status()

                else:
                    print("Target", end=" ")
                    undead.status()

            else:
                self.status()
                        
        else:
            print("Wrong Target")
        pause()

    def attack(self, undead):
        if isinstance(undead, Undead):
            if not self.isDead():
                if not undead.isDead():
                    damage = int(self.getHP())
                    print(self.getName(), "-", self.getType(), "Attacked", undead.getName(), "-", self.getType())
                    
                    if isinstance(undead, Ghost):
                        damage = damage * .1

                    undead.setHP(undead.getHP() - damage)
                    print(undead.getName(), "-", damage)

                    if undead.getHP() <= 0:
                        undead.setHP(0)
                        undead.isDead(True)
                        undead.status()
                
                else:
                    print("Target", end=" ")
                    undead.status()
            
            else:
                self.status()
                        
        else:
            print("Wrong Target")
        pause()
    
    def status(self):
        if self.isDead():
            print(self.getName(), "-", self.getType(), "is sleeping")
        else:
            print(self.getName(), "-", self.getType(), "is awake")

    def getAbilities(self):
        print("Abilities:")
        print("1. Attack")
        print("    - Dmg. equivalent to HP")
        print("2. Bite")
        print("    - HP increase Amt. 80% of opponent HP")
        print("    - Dmg. 80% of opponent HP")
  
    def getStatus(self):
        print(self.getName(), "-", self.getType())
        print("HP: ", self.getHP())
        print("State:", "Sleeping" if self.isDead() else "Awake")
    
    def getType(self):
        return "Vampire"
class Skeleton(Undead):

    def __init__(self):
        super().__init__()
        self.setHP(80)
        self.create_character()
        self.setName(input("Create name: "))
        while self.getName() in self.taken_names:
            print("Name already taken!")
            pause()
            os.system("cls")
            print("=========CREATE CHARACTER=========")
            self.setName(input("Create a different name: "))
        self.taken_names.append(self.getName())
        self.create_character()
        print("Name: ", self.getName(), "\nType:", self.getType(),"\nHP:", self.getHP(),"\n")
        self.getAbilities()

    def skill(self, undead):
        if isinstance(undead, Undead):
            if not self.isDead():
                if not undead.isDead():
                    damage = int(self.getHP() * .7)
                    print(self.getName(), "-", self.getType(), "Attacked", undead.getName(), "-", self.getType())
                    
                    if isinstance(undead, Ghost):
                        damage = damage * .1

                    undead.setHP(undead.getHP() - damage)
                    print(undead.getName(), "-", damage)

                    if undead.getHP() <= 0:
                        undead.setHP(0)
                        undead.isDead(True)
                        undead.status()
                
                else:
                    print("Target", end=" ")
                    undead.status()
            
            else:
                self.status()
                        
        else:
            print("Wrong Target")
        pause()

    def getAbilities(self):
        print("Abilities:")
        print("Attack")
        print("  - Dmg. 70% of my HP")
  
    def getStatus(self):
        print(self.getName(), "-", self.getType())
        print("HP: ", self.getHP())
        print("State:", "Sleeping" if self.isDead() else "Awake")

    def getType(self):
        return "Skeleton"
class Ghost(Undead):

    def __init__(self):
        super().__init__()
        self.setHP(50)
        self.create_character()
        self.setName(input("Create name: "))
        while self.getName() in self.taken_names:
            print("Name already taken!")
            pause()
            os.system("cls")
            print("=========CREATE CHARACTER=========")
            self.setName(input("Create a different name: "))
        self.taken_names.append(self.getName())
        self.create_character()
        print("Name: ", self.getName(), "\nType:", self.getType(),"\nHP:", self.getHP(),"\n")
        self.getAbilities()

    def skill(self, undead):
        if isinstance(undead, Undead):
            if not self.isDead():
                if not undead.isDead():
                    hp_gain = int(undead.getHP() * .1)
                    damage = hp_gain
                    self.setHP(self.getHP() + hp_gain)
                    print(self.getName(), "-", self.getType(), "haunts", undead.getName(), "-", undead.getType())
                    print(self.getName(), "-", self.getType(), "gain", hp_gain, "HP")

                    damage = hp_gain * .1 if isinstance(undead, Ghost) else damage
                        
                    undead.setHP(undead.getHP() - damage)
                    print(undead.getName(), "-", undead.getType(), "lose", damage, "HP")

                    if undead.getHP() <= 0:
                        undead.setHP(0)
                        undead.isDead(True)
                        undead.status()

                else:
                    print("Target", end=" ")
                    undead.status()

            else:
                self.status()
                        
        else:
            print("Wrong Target")
        pause()

    def attack(self, undead):
        if isinstance(undead, Undead):
            if not self.isDead():
                if not undead.isDead():
                    damage = int(self.getHP() * .2)
                    print(self.getName(), "-", self.getType(), "Attacked", undead.getName(), "-", self.getType())
                    
                    if isinstance(undead, Ghost):
                        damage = damage * .1

                    undead.setHP(undead.getHP() - damage)
                    print(undead.getName(), "-", damage)

                    if undead.getHP() <= 0:
                        undead.setHP(0)
                        undead.isDead(True)
                        undead.status()

                else:
                    print("Target", end=" ")
                    undead.status()
            
            else:
                self.status()
                        
        else:
            print("Wrong Target")
        pause()

    def getAbilities(self):
        print("Abilities:")
        print("1. Attack")
        print("    - Dmg. 20% of its HP.")
        print("2. Haunt")
        print("    - HP increase Amt. 10% of opponent HP")
        print("    - Dmg. 10% of opponent HP")
        print("Passive")
        print("    - Damage receive is only 10%")
  
    def getStatus(self):
        print(self.getName(), "-", self.getType())
        print("HP: ", self.getHP())
        print("State:", "Perished" if self.isDead() else "Haunting")

    def getType(self):
        return "Ghost"
class Lich(Undead):

    def __init__(self):
        super().__init__()
        self.setHP(80)
        self.create_character()
        self.setName(input("Create name: "))
        while self.getName() in self.taken_names:
            print("Name already taken!")
            pause()
            os.system("cls")
            print("=========CREATE CHARACTER=========")
            self.setName(input("Create a different name: "))
        self.taken_names.append(self.getName())
        self.create_character()
        print("Name: ", self.getName(), "\nType:", self.getType(),"\nHP:", self.getHP(),"\n")
        self.getAbilities()

    def skill(self, undead):
        if isinstance(undead, Undead):
            if not self.isDead():
                if not undead.isDead():
                    hp_gain = int(undead.getHP() * .1)
                    damage = hp_gain
                    self.setHP(self.getHP() + hp_gain)
                    print(self.getName(), "-", self.getType(), "cast a spell to", undead.getName(), "-", undead.getType())
                    print(self.getName(), "-", self.getType(), "gain", hp_gain, "HP")

                    damage = hp_gain * .1 if isinstance(undead, Ghost) else damage
                        
                    undead.setHP(undead.getHP() - damage)
                    print(undead.getName(), "-", undead.getType(), "lose", damage, "HP")

                    if undead.getHP() <= 0:
                        undead.setHP(0)
                        undead.isDead(True)
                        undead.status()

                else:
                    print("Target", end=" ")
                    undead.status()

            else:
                self.status()
                        
        else:
            print("Wrong Target")
        pause()

    def attack(self, undead):
        if isinstance(undead, Undead):
            if not self.isDead():
                if not undead.isDead():
                    damage = int(self.getHP() * .7)
                    print(self.getName(), "-", self.getType(), "Attacked", undead.getName(), "-", self.getType())
                    
                    if isinstance(undead, Ghost):
                        damage = damage * .1

                    undead.setHP(undead.getHP() - damage)
                    print(undead.getName(), "-", damage)

                    if undead.getHP() <= 0:
                        undead.setHP(0)
                        undead.isDead(True)
                        undead.status()

                else:
                    print("Target", end=" ")
                    undead.status()
            
            else:
                self.status()
                        
        else:
            print("Wrong Target")
        pause()

    def getAbilities(self):
        print("Abilities:")
        print("1. Attack")
        print("    - Dmg. 70% of its HP.")
        print("2. Cast Spell")
        print("    - HP increase Amt. 10% of opponent HP")
        print("    - Dmg. 10% of opponent HP")

    def getStatus(self):
        print(self.getName(), "-", self.getType())
        print("HP: ", self.getHP())
        print("State:", "Alive but cannot attack" if self.isDead() else "Alive")

    def getType(self):
        return "Lich"
class Mummy(Undead):

    def __init__(self):
        super().__init__()
        self.create_character()
        self.setName(input("Create name: "))
        while self.getName() in self.taken_names:
            print("Name already taken!")
            pause()
            os.system("cls")
            print("=========CREATE CHARACTER=========")
            self.setName(input("Create a different name: "))
        self.taken_names.append(self.getName())
        self.create_character()
        print("Name: ", self.getName(), "\nType:", self.getType(),"\nHP:", self.getHP(),"\n")
        self.getAbilities()

    def skill(self):
        if self.isDead():
            self.setHP(100)
            self.isDead(False)
            print(self.getName(), "has been resurrected!")
        pause()


    def attack(self, undead):
        if isinstance(undead, Undead):
            if not self.isDead():
                if not undead.isDead():
                    if not isinstance(undead, Mummy):
                        damage = self.getHP() * .5
                        print(self.getName(), "-", self.getType(), "Attacked", undead.getName(), "-", self.getType())
                        
                        if isinstance(undead, Ghost):
                            damage = damage * .1

                        undead.setHP(undead.getHP() - damage)
                        print(undead.getName(), "-", damage)

                    if undead.getHP() <= 0:
                        undead.setHP(0)
                        undead.isDead(True)
                        undead.status()

                    else:
                        print("Cannot attack the same kind.")
                
                else:
                    print("Target", end=" ")
                    undead.status()
            
            else:
                self.status()
                        
        else:
            print("Wrong Target")
        pause()

    def getAbilities(self):
        print("Abilities:")
        print("1. Attack")
        print("    - Dmg. 50% of my HP + 10% of opponents HP")
        print("2. Tear Out")
        print("    - Resurrect")
  
    def getStatus(self):
        print(self.getName(), "-", self.getType())
        print("HP: ", self.getHP())
        print("State:", "Dead" if self.isDead() else "Awake")

    def getType(self):
        return "Mummy"

#CREATE UNDEAD FUNCTION
def create_undead():
    load_delay()
    while True:
        os.system('cls')
        print("==========CREATE UNDEAD===========")
        print("1. Zombie\n2. Vampire\n3. Skeleton\n4. Ghost\n5. Lich\n6. Mummy\n7. Back to Menu")
        border()
        choice = input("Enter # of choice: ")
    
        if choice.isdigit():
            choice = int(choice)
            if choice == 1:
                create_character(zombie, Zombie())
            elif choice == 2:
                create_character(vampire, Vampire())
            elif choice == 3:
                create_character(skeleton, Skeleton())
            elif choice == 4:
                create_character(ghost, Ghost())
            elif choice == 5:
                create_character(lich, Lich())
            elif choice == 6:
                create_character(mummy, Mummy())
            elif choice == 7:
                load_delay()
                break    

            else:
                border()
                print("Invalid choice. Please try again.")
                pause() 
        else:
            border()
            print("Invalid choice. Please try again.")
            pause()
def create_character(char_type, className):#CREATE NEW INSTANCE
    if len(char_type) >= max_undead:
        print("Maximum number of", char_type[0].getType(), "is reached.")
        pause()
        time.sleep(.5)
        main_menu()
    else:
        #CREATE A NEW INSTANCE
        char_type.append(className)
        undead_array.append(className)
        print(end="")
        print(char_type[0].getType(), "Created")
        pause()
        time.sleep(.5)
        main_menu()

#COMMAND UNDEAD FUNCTIONS
def command():#SELECT ATTACKER CLASS
    flag = True
    while flag:
        if sum(map(len, [zombie, vampire, skeleton, ghost, lich, mummy])) > 1:
            while True:
                os.system('cls')
                print("==========COMMAND UNDEAD==========")
                print("1. Zombie\n2. Vampire\n3. Skeleton\n4. Ghost\n5. Lich\n6. Mummy\n7. Back to Menu")
                border()
                choice = input("Enter your choice: ")
                if choice.isdigit():
                    choice = int(choice)
                    if choice == 1:
                        command_character(zombie)
                    elif choice == 2:
                        command_character(vampire)
                    elif choice == 3:
                        command_character(skeleton)
                    elif choice == 4:
                        command_character(ghost)
                    elif choice == 5:
                        command_character(lich)
                    elif choice == 6:
                        command_character(mummy)
                    elif choice == 7:
                        main_menu()
                        break

                    else:
                        border()
                        print("Invalid choice. Please try again.")
                        pause()
                else:
                    border()
                    print("Invalid choice. Please try again.")
                    pause()
        else:
            border()
            print("Please create a character.")
            pause()
            load_delay
            main_menu()
def command_character(char_type):#CHOOSE ATTACKER
    if len(char_type) > 0:
        flag = True
        while flag:
            os.system('cls')
            print("==========COMMAND UNDEAD==========")
            for char in char_type:
                print(char.getName(), "-", char.getHP(),"HP")
            border()
            attacker_name = input("Choose a character by name: ")
            for char in char_type:
                if char.getName() == attacker_name:
                    choose_ability(char)
                if flag == True:
                    border()
                    print("Character not found...")
                    pause()
    else:
        border()
        print("There are no characters available")
        pause()
        command()
def choose_ability(attacker):#CHOOSE AN ABILITY
    load_delay()
    while True:
        os.system("cls")
        print("==========CAST ABILITIES=========")
        attacker.getAbilities()
        border()
        ability = input("Choose ability: ")
        if ability.isdigit():
            choice = int(ability)
            if choice == 1:
                ability = "attack"
                target(attacker, ability)
                break
            elif choice == 2 and not isinstance(attacker, Mummy):
                ability = "skill"
                target(attacker, ability)
                break
            elif choice == 2 and isinstance(attacker, Mummy):
                attacker.skill()
                main_menu()
            else:
                border()
                print("Invalid choice. Please try again.")
                pause()
        else:
            border()
            print("Invalid choice. Please try again.")
            pause()
def target(character, ability):#CHOOSE A TARGET
    load_delay()
    sorted_undead_array = sort_array()
    flag = True
    while flag:
        os.system("cls")
        print("==========SELECT TARGET==========")
        for i in range(len(sorted_undead_array)):
            if sorted_undead_array[i].getName() != character.getName():
                print(sorted_undead_array[i].getName(), "-", sorted_undead_array[i].getType())
        border()
        target_name = input("Choose a character to attack by name: ")
        while target_name == character.getName():
            print("Cannot attack itself.\nTry again.")
            print("=================================")
            target_name = input("Choose a character to attack by name: ")

        for i in range(len(sorted_undead_array)):
            if sorted_undead_array[i].getName() == target_name:
                target = sorted_undead_array[i]
                if ability == "attack":
                    load_delay()
                    print("==========COMBAT RESULT==========")
                    character.attack(target)
                    time.sleep(.7)
                    main_menu()
                elif ability == "skill":
                    load_delay()
                    print("==========COMBAT RESULT==========")
                    character.skill(target)
                    time.sleep(.7)
                    main_menu()
        border()
        print("Character not found.")
        pause()

#DISPLAY UNDEAD STATUS               
def display_undead():#done
    load_delay()
    print("=========DISPLAY UNDEAD===========")
    sorted_undead_array = sort_array()
    if sum(map(len, [zombie, vampire, skeleton, ghost, lich, mummy])) > 0:
        for undead in sorted_undead_array:
            undead.getStatus()
            border()
        os.system('pause')
        time.sleep(.5)
    else:
        print("No Undead Found")
        pause()

#SORTS THE ARRAY OF THE UNDEAD
def sort_array():
    sorted_undead_array = sorted(undead_array, key=lambda x: (
    isinstance(x, Mummy),
    isinstance(x, Lich),
    isinstance(x, Ghost),
    isinstance(x, Skeleton),
    isinstance(x, Vampire),
    isinstance(x, Zombie),
    ))
    return sorted_undead_array

#MAIN MENU FUNCTION
def main_menu():
    load = 1
    if load == 0:
        load_delay()
    else:
        load=0;
    while True:
        os.system('cls')
        print("===============MENU===============")
        print("1. Create Undead")
        print("2. Command Undead")
        print("3. Display Undead")
        print("4. Exit")
        border()
        choice = input("Enter # of choice: ")

        if choice.isdigit():
            choice = int(choice)
            if choice == 1:
                os.system('cls')
                create_undead()
            elif choice == 2:
                load_delay()
                command()
            elif choice == 3:
                os.system('cls')
                display_undead()
            elif choice == 4:
                load_delay()
                print("Exiting", end="")
                [print(".", end="", flush=True) or time.sleep(.5) for i in range(3)]
                os.system("cls")
                ty = "THANK YOU FOR PLAYING!"
                for x in ty:
                    print(x, end="")
                    time.sleep(.2)
                break
            else:
                print("Invalid choice. Please try again.\n")
        else:
            print("Invalid choice. Please try again.\n")

#OTHER FUNCTIONS
def load_delay():
    os.system('cls')
    border()
    print("Loading", end="")
    [print(".", end="", flush=True) or time.sleep(.5) for i in range(3)]
    print()
    border()
    time.sleep(.7)
    os.system('cls')
def border():
    print("==================================")
def pause():
    border()
    os.system('pause')
def load_game():
    os.system('cls')
    print("\n\n\t\tLOADING GAME")
    print("      ", end="")
    [print("=", end="", flush=True) or time.sleep(.1) for i in range(34)]
    time.sleep(1)
def welcome():
    os.system('cls')
    wel = "WELCOME TO UNDEAD"
    print("\n\n\n\t  ", end="")
    for x in wel:
        print(x, end="")
        time.sleep(.2)
    time.sleep(1)

#### CODE STARTS RUNNING HERE ####

#MAX CHARACTERS
max_undead = 3

#ARRAYS FOR EACH UNDEAD
zombie = []
vampire = []
skeleton = []
ghost = []
lich = []
mummy = []
undead_array = [] #COMPILATION OF UNDEAD

load_game()
welcome()
main_menu()






