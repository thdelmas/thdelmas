#!/usr/bin/env python3

import os
import json
from dotenv import load_dotenv
from py342 import IntraAPI

if __name__ == '__main__':
	print("Achievements Fetcher")
	print("Loading environment")
	if not os.path.isfile(".env"):
		print("Unable to load .env file")
		os._exit(1)
	load_dotenv()
	client_id = os.getenv('UID42')
	if not client_id:
		print("Undefined:\tUID42")
		os._exit(1)
	client_secret = os.getenv('PWD42')
	if not client_secret:
		print("Undefined:\tPWD42")
		os._exit(1)
	rate_limit = int(os.getenv('RATE_LIMIT'))
	if not rate_limit:
		print("Undefined:\tRATE_LIMIT")
		os._exit(1)
	scopes = "profile public projects elearning tig forum"
	print("OAuth")
	intra = IntraAPI.intraAPI(client_id, client_secret, 46, scopes, rate_limit)
	f = open('achievements_a.json')
	data = json.load(f)
	for i in data:
		intra.createAchievementsUser(98394, i["id"])
	intra.closeConnection()
