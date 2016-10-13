# FaceMashWebsite
A simple website that compares two images based on the ratings provided by the online audience.

##ELO RATING USED IN THE WEBSITE

The first step is to compute the transformed rating for each player or team:

R(1) = 10r(1)/400

R(2) = 10r(2)/400

This is just to simplify the further computations. In the second step we calculate the expected score for each player:

E(1) = R(1) / (R(1) + R(2))

E(2) = R(2) / (R(1) + R(2))

Now we wait for the match to finish and set the actual score in the third step:

S(1) = 1 if player 1 wins / 0.5 if draw / 0 if player 2 wins

S(2) = 0 if player 1 wins / 0.5 if draw / 1 if player 2 wins

Now we can put it all together and in a fourth step find out the updated Elo-rating for each player:

r'(1) = r(1) + K * (S(1) – E(1))

r'(2) = r(2) + K * (S(2) – E(2))
